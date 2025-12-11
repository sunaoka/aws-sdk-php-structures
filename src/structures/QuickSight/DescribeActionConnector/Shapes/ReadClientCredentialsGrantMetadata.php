<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeActionConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BaseEndpoint
 * @property ReadClientCredentialsDetails|null $ReadClientCredentialsDetails
 * @property 'PLAIN_CREDENTIALS'|null $ClientCredentialsSource
 */
class ReadClientCredentialsGrantMetadata extends Shape
{
    /**
     * @param array{
     *     BaseEndpoint: string,
     *     ReadClientCredentialsDetails?: ReadClientCredentialsDetails|null,
     *     ClientCredentialsSource?: 'PLAIN_CREDENTIALS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
