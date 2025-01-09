<?php

namespace Sunaoka\Aws\Structures\Detective\UpdateOrganizationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GraphArn
 * @property bool $AutoEnable
 */
class UpdateOrganizationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     GraphArn: string,
     *     AutoEnable?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
