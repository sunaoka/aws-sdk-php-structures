<?php

namespace Sunaoka\Aws\Structures\MediaStore\CreateContainer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContainerName
 * @property list<Shapes\Tag> $Tags
 */
class CreateContainerRequest extends Request
{
    /**
     * @param array{
     *     ContainerName: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
