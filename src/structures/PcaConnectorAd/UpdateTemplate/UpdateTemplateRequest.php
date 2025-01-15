<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\UpdateTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TemplateDefinition|null $Definition
 * @property bool|null $ReenrollAllCertificateHolders
 * @property string $TemplateArn
 */
class UpdateTemplateRequest extends Request
{
    /**
     * @param array{
     *     Definition?: Shapes\TemplateDefinition|null,
     *     ReenrollAllCertificateHolders?: bool|null,
     *     TemplateArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
