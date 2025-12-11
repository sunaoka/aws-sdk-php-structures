<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\GetBenefitApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FileURI
 * @property string|null $BusinessUseCase
 * @property string|null $FileName
 * @property string|null $FileStatus
 * @property string|null $FileStatusReason
 * @property 'application/msword'|'application/vnd.openxmlformats-officedocument.wordprocessingml.document'|'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'|'application/vnd.openxmlformats-officedocument.presentationml.presentation'|'application/pdf'|'image/png'|'image/jpeg'|'image/svg+xml'|'text/csv'|null $FileType
 * @property string|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 */
class FileDetail extends Shape
{
    /**
     * @param array{
     *     FileURI: string,
     *     BusinessUseCase?: string|null,
     *     FileName?: string|null,
     *     FileStatus?: string|null,
     *     FileStatusReason?: string|null,
     *     FileType?: 'application/msword'|'application/vnd.openxmlformats-officedocument.wordprocessingml.document'|'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'|'application/vnd.openxmlformats-officedocument.presentationml.presentation'|'application/pdf'|'image/png'|'image/jpeg'|'image/svg+xml'|'text/csv'|null,
     *     CreatedBy?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
