<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeActionConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReadAuthorizationCodeGrantDetails|null $ReadAuthorizationCodeGrantDetails
 */
class ReadAuthorizationCodeGrantCredentialsDetails extends Shape
{
    /**
     * @param array{ReadAuthorizationCodeGrantDetails?: ReadAuthorizationCodeGrantDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
