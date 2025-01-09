<?php

namespace Sunaoka\Aws\Structures\Repostspace\UpdateSpace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property string $roleArn
 * @property string $spaceId
 * @property 'BASIC'|'STANDARD' $tier
 */
class UpdateSpaceRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     roleArn?: string,
     *     spaceId: string,
     *     tier?: 'BASIC'|'STANDARD'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
