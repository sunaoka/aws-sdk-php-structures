<?php

namespace Sunaoka\Aws\Structures\SecurityHub\EnableSecurityHub;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string>|null $Tags
 * @property bool|null $EnableDefaultStandards
 * @property 'STANDARD_CONTROL'|'SECURITY_CONTROL'|null $ControlFindingGenerator
 */
class EnableSecurityHubRequest extends Request
{
    /**
     * @param array{
     *     Tags?: array<string, string>|null,
     *     EnableDefaultStandards?: bool|null,
     *     ControlFindingGenerator?: 'STANDARD_CONTROL'|'SECURITY_CONTROL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
