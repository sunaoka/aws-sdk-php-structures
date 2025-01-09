<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property string $DisplayName
 * @property string $ImageName
 * @property string $RoleArn
 * @property list<Shapes\Tag> $Tags
 */
class CreateImageRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     DisplayName?: string,
     *     ImageName: string,
     *     RoleArn: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
