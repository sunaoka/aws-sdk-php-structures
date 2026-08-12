<?php

namespace Sunaoka\Aws\Structures\Iam\GetRoleTemplateVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateArn
 * @property int|null $MinorVersion
 */
class GetRoleTemplateVersionRequest extends Request
{
    /**
     * @param array{
     *     TemplateArn: string,
     *     MinorVersion?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
