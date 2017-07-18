<?php
declare(strict_types=1);
namespace SONFin;

interface SeviceContainerInterface
{
	public function add();
	public function addLazy();
	public function get();
	public function has();
}