<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\AssociateRepository\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $ConnectionArn
 * @property string $Owner
 */
class ThirdPartySourceRepository extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     ConnectionArn: string,
     *     Owner: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
