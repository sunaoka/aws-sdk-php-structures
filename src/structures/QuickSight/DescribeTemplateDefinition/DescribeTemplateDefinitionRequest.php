<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $TemplateId
 * @property int<1, max> $VersionNumber
 * @property string $AliasName
 */
class DescribeTemplateDefinitionRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     TemplateId: string,
     *     VersionNumber?: int<1, max>,
     *     AliasName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
