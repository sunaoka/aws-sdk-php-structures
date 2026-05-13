<?php

namespace Sunaoka\Aws\Structures\DSQL\CreateStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterIdentifier
 * @property Shapes\TargetDefinition $targetDefinition
 * @property 'UNORDERED' $ordering
 * @property 'JSON' $format
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 */
class CreateStreamRequest extends Request
{
    /**
     * @param array{
     *     clusterIdentifier: string,
     *     targetDefinition: Shapes\TargetDefinition,
     *     ordering: 'UNORDERED',
     *     format: 'JSON',
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
