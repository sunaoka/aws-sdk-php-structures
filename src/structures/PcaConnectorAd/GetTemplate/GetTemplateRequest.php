<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\GetTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateArn
 */
class GetTemplateRequest extends Request
{
    /**
     * @param array{TemplateArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
