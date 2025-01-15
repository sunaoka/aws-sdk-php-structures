<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $DeleteProperties
 * @property string|null $Description
 * @property string|null $DisplayName
 * @property string $ImageName
 * @property string|null $RoleArn
 */
class UpdateImageRequest extends Request
{
    /**
     * @param array{
     *     DeleteProperties?: list<string>|null,
     *     Description?: string|null,
     *     DisplayName?: string|null,
     *     ImageName: string,
     *     RoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
