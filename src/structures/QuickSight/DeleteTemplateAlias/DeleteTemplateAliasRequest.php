<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteTemplateAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $TemplateId
 * @property string $AliasName
 */
class DeleteTemplateAliasRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     TemplateId: string,
     *     AliasName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
