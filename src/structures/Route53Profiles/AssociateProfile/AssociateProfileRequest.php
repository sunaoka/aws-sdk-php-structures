<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\AssociateProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $ProfileId
 * @property string $ResourceId
 * @property list<Shapes\Tag> $Tags
 */
class AssociateProfileRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ProfileId: string,
     *     ResourceId: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
