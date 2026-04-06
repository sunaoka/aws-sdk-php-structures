<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchUpdateFindingsV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $MetadataUids
 * @property list<Shapes\OcsfFindingIdentifier>|null $FindingIdentifiers
 * @property string|null $Comment
 * @property int|null $SeverityId
 * @property int|null $StatusId
 */
class BatchUpdateFindingsV2Request extends Request
{
    /**
     * @param array{
     *     MetadataUids?: list<string>|null,
     *     FindingIdentifiers?: list<Shapes\OcsfFindingIdentifier>|null,
     *     Comment?: string|null,
     *     SeverityId?: int|null,
     *     StatusId?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
