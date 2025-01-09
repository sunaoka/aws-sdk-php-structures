<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CertificateValidity $CertificateValidity
 * @property EnrollmentFlagsV4 $EnrollmentFlags
 * @property ExtensionsV4 $Extensions
 * @property GeneralFlagsV4 $GeneralFlags
 * @property 'SHA256'|'SHA384'|'SHA512' $HashAlgorithm
 * @property PrivateKeyAttributesV4 $PrivateKeyAttributes
 * @property PrivateKeyFlagsV4 $PrivateKeyFlags
 * @property SubjectNameFlagsV4 $SubjectNameFlags
 * @property list<string> $SupersededTemplates
 */
class TemplateV4 extends Shape
{
    /**
     * @param array{
     *     CertificateValidity: CertificateValidity,
     *     EnrollmentFlags: EnrollmentFlagsV4,
     *     Extensions: ExtensionsV4,
     *     GeneralFlags: GeneralFlagsV4,
     *     HashAlgorithm?: 'SHA256'|'SHA384'|'SHA512',
     *     PrivateKeyAttributes: PrivateKeyAttributesV4,
     *     PrivateKeyFlags: PrivateKeyFlagsV4,
     *     SubjectNameFlags: SubjectNameFlagsV4,
     *     SupersededTemplates?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
