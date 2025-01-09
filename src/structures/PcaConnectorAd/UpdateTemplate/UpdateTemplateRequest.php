<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\UpdateTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TemplateDefinition $Definition
 * @property bool $ReenrollAllCertificateHolders
 * @property string $TemplateArn
 */
class UpdateTemplateRequest extends Request
{
    /**
     * @param array{
     *     Definition?: Shapes\TemplateDefinition,
     *     ReenrollAllCertificateHolders?: bool,
     *     TemplateArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
