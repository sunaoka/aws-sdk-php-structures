<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string|null $DisplayName
 * @property string $ImageName
 * @property string $RoleArn
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateImageRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     DisplayName?: string|null,
     *     ImageName: string,
     *     RoleArn: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
