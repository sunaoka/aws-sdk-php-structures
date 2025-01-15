<?php

namespace Sunaoka\Aws\Structures\MediaStore\CreateContainer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContainerName
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateContainerRequest extends Request
{
    /**
     * @param array{
     *     ContainerName: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
