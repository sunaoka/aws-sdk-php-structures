<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplateAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $TemplateId
 * @property string $AliasName
 * @property int $TemplateVersionNumber
 */
class CreateTemplateAliasRequest extends Request
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
