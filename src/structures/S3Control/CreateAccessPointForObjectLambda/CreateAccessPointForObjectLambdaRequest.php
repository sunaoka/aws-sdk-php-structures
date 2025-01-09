<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateAccessPointForObjectLambda;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $Name
 * @property Shapes\ObjectLambdaConfiguration $Configuration
 */
class CreateAccessPointForObjectLambdaRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     Name: string,
     *     Configuration: Shapes\ObjectLambdaConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
