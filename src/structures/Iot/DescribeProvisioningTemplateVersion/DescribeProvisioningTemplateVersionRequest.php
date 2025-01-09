<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeProvisioningTemplateVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $templateName
 * @property int $versionId
 */
class DescribeProvisioningTemplateVersionRequest extends Request
{
    /**
     * @param array{
     *     templateName: string,
     *     versionId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
