<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\PutGroupConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Group
 * @property list<Shapes\GroupConfigurationItem> $Configuration
 */
class PutGroupConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Group?: string,
     *     Configuration?: list<Shapes\GroupConfigurationItem>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
