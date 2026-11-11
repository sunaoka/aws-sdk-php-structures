<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\AssociateProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProfileId
 * @property string $ResourceId
 * @property string $Name
 * @property list<Shapes\Tag>|null $Tags
 * @property int<100, 9900>|null $Priority
 */
class AssociateProfileRequest extends Request
{
    /**
     * @param array{
     *     ProfileId: string,
     *     ResourceId: string,
     *     Name: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     Priority?: int<100, 9900>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
