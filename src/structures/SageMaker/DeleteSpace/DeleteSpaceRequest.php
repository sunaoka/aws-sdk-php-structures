<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteSpace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property string $SpaceName
 */
class DeleteSpaceRequest extends Request
{
    /**
     * @param array{
     *     DomainId: string,
     *     SpaceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
