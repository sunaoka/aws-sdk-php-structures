<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetSpaceCredentialsForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $spaceId
 * @property string|null $domainId
 * @property string|null $targetAccountId
 */
class SpaceCredentialRequestContext extends Shape
{
    /**
     * @param array{
     *     spaceId?: string|null,
     *     domainId?: string|null,
     *     targetAccountId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
