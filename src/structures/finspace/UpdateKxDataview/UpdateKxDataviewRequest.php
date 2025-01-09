<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxDataview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $databaseName
 * @property string $dataviewName
 * @property string $description
 * @property string $changesetId
 * @property list<Shapes\KxDataviewSegmentConfiguration> $segmentConfigurations
 * @property string $clientToken
 */
class UpdateKxDataviewRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     databaseName: string,
     *     dataviewName: string,
     *     description?: string,
     *     changesetId?: string,
     *     segmentConfigurations?: list<Shapes\KxDataviewSegmentConfiguration>,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
