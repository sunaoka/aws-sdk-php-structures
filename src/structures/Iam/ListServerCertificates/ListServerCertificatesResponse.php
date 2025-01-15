<?php

namespace Sunaoka\Aws\Structures\Iam\ListServerCertificates;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ServerCertificateMetadata> $ServerCertificateMetadataList
 * @property bool|null $IsTruncated
 * @property string|null $Marker
 */
class ListServerCertificatesResponse extends Response
{
}
