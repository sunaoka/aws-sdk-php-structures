<?php

namespace Sunaoka\Aws\Structures\SecurityHub\EnableSecurityHub;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string> $Tags
 * @property bool $EnableDefaultStandards
 * @property 'STANDARD_CONTROL'|'SECURITY_CONTROL' $ControlFindingGenerator
 */
class EnableSecurityHubRequest extends Request
{
    /**
     * @param array{
     *     Tags?: array<string, string>,
     *     EnableDefaultStandards?: bool,
     *     ControlFindingGenerator?: 'STANDARD_CONTROL'|'SECURITY_CONTROL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
