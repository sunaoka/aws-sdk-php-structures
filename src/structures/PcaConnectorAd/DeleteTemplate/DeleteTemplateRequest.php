<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\DeleteTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateArn
 */
class DeleteTemplateRequest extends Request
{
    /**
     * @param array{TemplateArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
