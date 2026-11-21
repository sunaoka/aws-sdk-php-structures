<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAccessControlApplicationSecret\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IDP_PROVIDED' $ClientSecretSourceType
 * @property ClientSecretConfigurationDetail|null $ClientSecretConfigurationDetail
 */
class ClientSecretConfiguration extends Shape
{
    /**
     * @param array{
     *     ClientSecretSourceType: 'IDP_PROVIDED',
     *     ClientSecretConfigurationDetail?: ClientSecretConfigurationDetail|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
