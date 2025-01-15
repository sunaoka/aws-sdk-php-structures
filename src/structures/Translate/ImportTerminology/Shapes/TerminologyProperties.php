<?php

namespace Sunaoka\Aws\Structures\Translate\ImportTerminology\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $Arn
 * @property string|null $SourceLanguageCode
 * @property list<string>|null $TargetLanguageCodes
 * @property EncryptionKey|null $EncryptionKey
 * @property int|null $SizeBytes
 * @property int|null $TermCount
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property 'UNI'|'MULTI'|null $Directionality
 * @property string|null $Message
 * @property int|null $SkippedTermCount
 * @property 'CSV'|'TMX'|'TSV'|null $Format
 */
class TerminologyProperties extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Description?: string|null,
     *     Arn?: string|null,
     *     SourceLanguageCode?: string|null,
     *     TargetLanguageCodes?: list<string>|null,
     *     EncryptionKey?: EncryptionKey|null,
     *     SizeBytes?: int|null,
     *     TermCount?: int|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     Directionality?: 'UNI'|'MULTI'|null,
     *     Message?: string|null,
     *     SkippedTermCount?: int|null,
     *     Format?: 'CSV'|'TMX'|'TSV'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
