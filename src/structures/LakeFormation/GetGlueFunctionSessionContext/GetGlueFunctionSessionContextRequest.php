<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetGlueFunctionSessionContext;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $UserDefinedFunctionArns
 * @property int<60, 86400>|null $DurationSeconds
 */
class GetGlueFunctionSessionContextRequest extends Request
{
    /**
     * @param array{
     *     UserDefinedFunctionArns: list<string>,
     *     DurationSeconds?: int<60, 86400>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
