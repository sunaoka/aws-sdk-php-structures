<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxDataview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $databaseName
 * @property string $dataviewName
 * @property 'SINGLE'|'MULTI' $azMode
 * @property string|null $availabilityZoneId
 * @property string|null $changesetId
 * @property list<Shapes\KxDataviewSegmentConfiguration>|null $segmentConfigurations
 * @property bool|null $autoUpdate
 * @property bool|null $readWrite
 * @property string|null $description
 * @property array<string, string>|null $tags
 * @property string $clientToken
 */
class CreateKxDataviewRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     databaseName: string,
     *     dataviewName: string,
     *     azMode: 'SINGLE'|'MULTI',
     *     availabilityZoneId?: string|null,
     *     changesetId?: string|null,
     *     segmentConfigurations?: list<Shapes\KxDataviewSegmentConfiguration>|null,
     *     autoUpdate?: bool|null,
     *     readWrite?: bool|null,
     *     description?: string|null,
     *     tags?: array<string, string>|null,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
