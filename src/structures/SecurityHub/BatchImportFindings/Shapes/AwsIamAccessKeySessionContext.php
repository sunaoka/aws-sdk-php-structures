<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsIamAccessKeySessionContextAttributes|null $Attributes
 * @property AwsIamAccessKeySessionContextSessionIssuer|null $SessionIssuer
 */
class AwsIamAccessKeySessionContext extends Shape
{
    /**
     * @param array{
     *     Attributes?: AwsIamAccessKeySessionContextAttributes|null,
     *     SessionIssuer?: AwsIamAccessKeySessionContextSessionIssuer|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
