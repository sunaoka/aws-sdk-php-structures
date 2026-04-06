<?php

namespace Sunaoka\Aws\Structures\WellArchitected\DeleteTemplateShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ShareId
 * @property string $TemplateArn
 * @property string $ClientRequestToken
 */
class DeleteTemplateShareRequest extends Request
{
    /**
     * @param array{
     *     ShareId: string,
     *     TemplateArn: string,
     *     ClientRequestToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
