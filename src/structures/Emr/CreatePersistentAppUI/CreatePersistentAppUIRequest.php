<?php

namespace Sunaoka\Aws\Structures\Emr\CreatePersistentAppUI;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TargetResourceArn
 * @property Shapes\EMRContainersConfig|null $EMRContainersConfig
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $XReferer
 * @property 'SHS'|'TEZUI'|'YTS'|null $ProfilerType
 */
class CreatePersistentAppUIRequest extends Request
{
    /**
     * @param array{
     *     TargetResourceArn: string,
     *     EMRContainersConfig?: Shapes\EMRContainersConfig|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     XReferer?: string|null,
     *     ProfilerType?: 'SHS'|'TEZUI'|'YTS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
