<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AwsLocation|null $awsLocation
 * @property string|null $description
 * @property string $domainIdentifier
 * @property string $identifier
 * @property Shapes\ConnectionPropertiesPatch|null $props
 */
class UpdateConnectionRequest extends Request
{
    /**
     * @param array{
     *     awsLocation?: Shapes\AwsLocation|null,
     *     description?: string|null,
     *     domainIdentifier: string,
     *     identifier: string,
     *     props?: Shapes\ConnectionPropertiesPatch|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
