<?php

namespace Sunaoka\Aws\Structures\Detective\UpdateOrganizationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GraphArn
 * @property bool|null $AutoEnable
 */
class UpdateOrganizationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     GraphArn: string,
     *     AutoEnable?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
