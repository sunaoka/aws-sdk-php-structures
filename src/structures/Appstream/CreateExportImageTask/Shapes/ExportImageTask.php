<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateExportImageTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TaskId
 * @property string $ImageArn
 * @property string $AmiName
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property string|null $AmiDescription
 * @property 'EXPORTING'|'COMPLETED'|'FAILED'|null $State
 * @property string|null $AmiId
 * @property array<string, string>|null $TagSpecifications
 * @property list<ErrorDetails>|null $ErrorDetails
 */
class ExportImageTask extends Shape
{
    /**
     * @param array{
     *     TaskId: string,
     *     ImageArn: string,
     *     AmiName: string,
     *     CreatedDate: \Aws\Api\DateTimeResult,
     *     AmiDescription?: string|null,
     *     State?: 'EXPORTING'|'COMPLETED'|'FAILED'|null,
     *     AmiId?: string|null,
     *     TagSpecifications?: array<string, string>|null,
     *     ErrorDetails?: list<ErrorDetails>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
