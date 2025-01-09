<?php

namespace Sunaoka\Aws\Structures\Translate\ImportTerminology\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property string $Arn
 * @property string $SourceLanguageCode
 * @property list<string> $TargetLanguageCodes
 * @property EncryptionKey $EncryptionKey
 * @property int $SizeBytes
 * @property int $TermCount
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property 'UNI'|'MULTI' $Directionality
 * @property string $Message
 * @property int $SkippedTermCount
 * @property 'CSV'|'TMX'|'TSV' $Format
 */
class TerminologyProperties extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Description?: string,
     *     Arn?: string,
     *     SourceLanguageCode?: string,
     *     TargetLanguageCodes?: list<string>,
     *     EncryptionKey?: EncryptionKey,
     *     SizeBytes?: int,
     *     TermCount?: int,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     Directionality?: 'UNI'|'MULTI',
     *     Message?: string,
     *     SkippedTermCount?: int,
     *     Format?: 'CSV'|'TMX'|'TSV'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
