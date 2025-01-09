<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxDataview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $databaseName
 * @property string $dataviewName
 * @property 'SINGLE'|'MULTI' $azMode
 * @property string $availabilityZoneId
 * @property string $changesetId
 * @property list<Shapes\KxDataviewSegmentConfiguration> $segmentConfigurations
 * @property bool $autoUpdate
 * @property bool $readWrite
 * @property string $description
 * @property array<string, string> $tags
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
     *     availabilityZoneId?: string,
     *     changesetId?: string,
     *     segmentConfigurations?: list<Shapes\KxDataviewSegmentConfiguration>,
     *     autoUpdate?: bool,
     *     readWrite?: bool,
     *     description?: string,
     *     tags?: array<string, string>,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
