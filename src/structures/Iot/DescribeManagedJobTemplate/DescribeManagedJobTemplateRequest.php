<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeManagedJobTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $templateName
 * @property string|null $templateVersion
 */
class DescribeManagedJobTemplateRequest extends Request
{
    /**
     * @param array{
     *     templateName: string,
     *     templateVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
