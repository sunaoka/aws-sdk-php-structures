<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $TemplateId
 * @property int<1, max>|null $VersionNumber
 * @property string|null $AliasName
 */
class DescribeTemplateDefinitionRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     TemplateId: string,
     *     VersionNumber?: int<1, max>|null,
     *     AliasName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
