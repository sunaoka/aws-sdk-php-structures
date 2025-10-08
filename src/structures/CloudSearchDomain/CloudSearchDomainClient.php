<?php

namespace Sunaoka\Aws\Structures\CloudSearchDomain;

class CloudSearchDomainClient extends \Aws\CloudSearchDomain\CloudSearchDomainClient
{
    use Search\SearchTrait;
    use Suggest\SuggestTrait;
    use UploadDocuments\UploadDocumentsTrait;
}
