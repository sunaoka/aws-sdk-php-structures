<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateActionConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BaseEndpoint
 * @property 'PLAIN_CREDENTIALS'|null $ClientCredentialsSource
 * @property ClientCredentialsDetails|null $ClientCredentialsDetails
 */
class ClientCredentialsGrantMetadata extends Shape
{
    /**
     * @param array{
     *     BaseEndpoint: string,
     *     ClientCredentialsSource?: 'PLAIN_CREDENTIALS'|null,
     *     ClientCredentialsDetails?: ClientCredentialsDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
