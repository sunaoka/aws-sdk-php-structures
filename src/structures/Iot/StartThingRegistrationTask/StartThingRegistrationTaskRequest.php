<?php

namespace Sunaoka\Aws\Structures\Iot\StartThingRegistrationTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $templateBody
 * @property string $inputFileBucket
 * @property string $inputFileKey
 * @property string $roleArn
 */
class StartThingRegistrationTaskRequest extends Request
{
    /**
     * @param array{
     *     templateBody: string,
     *     inputFileBucket: string,
     *     inputFileKey: string,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
