<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxDataview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $databaseName
 * @property string $dataviewName
 * @property string|null $description
 * @property string|null $changesetId
 * @property list<Shapes\KxDataviewSegmentConfiguration>|null $segmentConfigurations
 * @property string $clientToken
 */
class UpdateKxDataviewRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     databaseName: string,
     *     dataviewName: string,
     *     description?: string|null,
     *     changesetId?: string|null,
     *     segmentConfigurations?: list<Shapes\KxDataviewSegmentConfiguration>|null,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
