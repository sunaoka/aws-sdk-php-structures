<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsIamAccessKeySessionContextAttributes $Attributes
 * @property AwsIamAccessKeySessionContextSessionIssuer $SessionIssuer
 */
class AwsIamAccessKeySessionContext extends Shape
{
    /**
     * @param array{
     *     Attributes?: AwsIamAccessKeySessionContextAttributes,
     *     SessionIssuer?: AwsIamAccessKeySessionContextSessionIssuer
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
