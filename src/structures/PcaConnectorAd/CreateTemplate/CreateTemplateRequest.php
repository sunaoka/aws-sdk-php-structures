<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\CreateTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $ConnectorArn
 * @property Shapes\TemplateDefinition $Definition
 * @property string $Name
 * @property array<string, string>|null $Tags
 */
class CreateTemplateRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     ConnectorArn: string,
     *     Definition: Shapes\TemplateDefinition,
     *     Name: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
