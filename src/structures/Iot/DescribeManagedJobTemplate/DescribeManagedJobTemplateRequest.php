<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeManagedJobTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $templateName
 * @property string $templateVersion
 */
class DescribeManagedJobTemplateRequest extends Request
{
    /**
     * @param array{
     *     templateName: string,
     *     templateVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
