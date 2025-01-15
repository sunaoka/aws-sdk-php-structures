<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\PutGroupConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Group
 * @property list<Shapes\GroupConfigurationItem>|null $Configuration
 */
class PutGroupConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Group?: string|null,
     *     Configuration?: list<Shapes\GroupConfigurationItem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
