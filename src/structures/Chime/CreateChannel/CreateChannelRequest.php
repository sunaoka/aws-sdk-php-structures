<?php

namespace Sunaoka\Aws\Structures\Chime\CreateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceArn
 * @property string $Name
 * @property 'UNRESTRICTED'|'RESTRICTED'|null $Mode
 * @property 'PUBLIC'|'PRIVATE'|null $Privacy
 * @property string|null $Metadata
 * @property string $ClientRequestToken
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ChimeBearer
 */
class CreateChannelRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceArn: string,
     *     Name: string,
     *     Mode?: 'UNRESTRICTED'|'RESTRICTED'|null,
     *     Privacy?: 'PUBLIC'|'PRIVATE'|null,
     *     Metadata?: string|null,
     *     ClientRequestToken: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     ChimeBearer?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
