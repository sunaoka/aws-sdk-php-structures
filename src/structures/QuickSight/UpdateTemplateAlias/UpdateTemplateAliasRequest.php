<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplateAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $TemplateId
 * @property string $AliasName
 * @property int $TemplateVersionNumber
 */
class UpdateTemplateAliasRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     TemplateId: string,
     *     AliasName: string,
     *     TemplateVersionNumber: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
