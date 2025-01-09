<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $DeleteProperties
 * @property string $Description
 * @property string $DisplayName
 * @property string $ImageName
 * @property string $RoleArn
 */
class UpdateImageRequest extends Request
{
    /**
     * @param array{
     *     DeleteProperties?: list<string>,
     *     Description?: string,
     *     DisplayName?: string,
     *     ImageName: string,
     *     RoleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
