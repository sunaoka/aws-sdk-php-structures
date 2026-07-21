<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateQev2IdcApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdcInstanceArn
 * @property string $Qev2IdcApplicationName
 * @property string $IdcDisplayName
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateQev2IdcApplicationRequest extends Request
{
    /**
     * @param array{
     *     IdcInstanceArn: string,
     *     Qev2IdcApplicationName: string,
     *     IdcDisplayName: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
