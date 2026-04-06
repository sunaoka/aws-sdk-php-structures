<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateTemplateShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateArn
 * @property string $SharedWith
 * @property string $ClientRequestToken
 */
class CreateTemplateShareRequest extends Request
{
    /**
     * @param array{
     *     TemplateArn: string,
     *     SharedWith: string,
     *     ClientRequestToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
