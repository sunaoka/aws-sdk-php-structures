<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplateAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $TemplateId
 * @property string $AliasName
 * @property int<1, max> $TemplateVersionNumber
 */
class UpdateTemplateAliasRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     TemplateId: string,
     *     AliasName: string,
     *     TemplateVersionNumber: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
